<?php

namespace Database\Seeders;

use App\Models\ContactInformation;
use Illuminate\Database\Seeder;

class ContactInformationSeeder extends Seeder
{
    public function run(): void
    {
        ContactInformation::create([
            // Contact Information
            'tel_number' => '+1 (123) 456-7890',
            'mobile_number' => '+1 (987) 654-3210',
            'email' => 'info@company.com',
            'whatsapp_number' => '+1 (987) 654-3210',
            
            // Corporate Office
            'corporate_address_line1' => '123 Corporate Tower',
            'corporate_address_line2' => 'Main Street',
            'corporate_address_line3' => 'Business District',
            'corporate_address_line4' => 'New York, NY 10001',
            'corporate_address_line5' => 'United States',
            
            // Factory Address
            'factory_address_line1' => '456 Industrial Park',
            'factory_address_line2' => 'Factory Road',
            'factory_address_line3' => 'Manufacturing Zone',
            'factory_address_line4' => 'Chicago, IL 60601',
            'factory_address_line5' => 'United States',
            
            // Outlet Address
            'outlet_address_line1' => '789 Retail Plaza',
            'outlet_address_line2' => 'Shopping Avenue',
            'outlet_address_line3' => 'Downtown',
            'outlet_address_line4' => 'Los Angeles, CA 90001',
            'outlet_address_line5' => 'United States',
        ]);
    }
}