<?php

namespace App\Domain\Patient\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('medications')->delete();
        DB::table('alergies')->delete();
        DB::table('conditions')->delete();
        DB::table('next_of_kins')->delete();
        DB::table('patients')->delete();

        $patients = json_decode(file_get_contents(__DIR__ . '/../../Data/patient.json'), true);

        foreach ($patients as $patient) {
            DB::table('patients')->insert([
                'id_card' => $patient['IdCard'],
                'gender' => $patient['Gender'],
                'name' => $patient['Name'],
                'surname' => $patient['Surname'],
                'date_of_birth' => now()->parse($patient['DateOfBirth'])->format('Y-m-d H:i:s'),
                'address' => $patient['Address'],
                'post_code' => $patient['Postcode'],
                'contact_number_one' => $patient['ContactNumber1'],
                'contact_number_two' => $patient['ContactNumber2'],
            ]);
            $newPatient = DB::table('patients')->where('id_card', $patient['IdCard'])->first();

            foreach ($patient['NextOfKin'] as $nextOfKin) {
                $isNextOfKin = DB::table('patients')->where('id_card', $nextOfKin['IdCard'])->first();
                if (!$isNextOfKin) {
                    DB::table('patients')->insert([
                        'id_card' => $nextOfKin['IdCard'],
                        'name' => $nextOfKin['Name'],
                        'surname' => $nextOfKin['Surname'],
                        'contact_number_one' => $nextOfKin['ContactNumber1'],
                        'contact_number_two' => $nextOfKin['ContactNumber2'],
                    ]);
                }

                $isNextOfKin = DB::table('patients')->where('id_card', $nextOfKin['IdCard'])->first();

                DB::table('next_of_kins')->insert([
                    'patient_id' => $newPatient->id,
                    'next_of_kin' => $isNextOfKin->id,
                ]);
            }

            foreach ($patient['Medical']['Conditions'] as $condition) {
                DB::table('conditions')->insert([
                    'patient_id' => $newPatient->id,
                    'name' => $condition['Name'],
                    'note' => $condition['Notes']
                ]);
            }

            foreach ($patient['Medical']['Alergies'] as $alergi) {
                DB::table('alergies')->insert([
                    'patient_id' => $newPatient->id,
                    'name' => $alergi['Name'],
                    'note' => $alergi['Notes']
                ]);
            }

            foreach ($patient['Medical']['Medication'] as $medication) {
                DB::table('medications')->insert([
                    'patient_id' => $newPatient->id,
                    'name' => $medication['Name'],
                    'note' => $medication['Notes'],
                    'start_date' => $medication['StartDate'],
                    'end_date' => $medication['EndDate'],
                ]);
            }
        }
    }
}
