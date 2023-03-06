<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{

    // Attendance Get with ZOHO API
    public function apiAttendance()
    {
        $dateTimeFrom = '2022-02-10';
        $dateTimeTo   = '2022-02-20';

        $query = '{"select_query":"select Name, Contact_Name.First_Name, Site_Address, City1, State, PostcodeS, lat1, lon1, PHONE_NUMBER_1, Closing_Date, Total_Sale_KW, Business_Entity_Name, Lead_Source, CSR_Name, Owner, Owner.first_name, Owner.last_name from Sales where Closing_Date between \'' . $dateTimeFrom . '\' and ' . '\'' . $dateTimeTo . '\' ORDER BY Owner ASC"}';

        $post = [

            'refresh_token'    => '1000.1be4421d720c4698f2ea7b12bcecb434.d194dedeb124ecd08b073a19e80ffe45',
            'client_id'        => '1000.186QQ21WFT0F3JSBBA45ZHLADP502H',
            'client_secret'    => '722d4b9f18944ad21f0f76b829f8976eedda4db352',
            'grant_type'    => 'refresh_token'
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token");

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


        $response = curl_exec($ch);
        $response = json_decode($response);

        if ($response != null) {
            $access_token = $response->access_token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/coql");

            curl_setopt($ch, CURLOPT_POST, 1);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Authorization: Zoho-oauthtoken ' . $access_token,
                    'Content-Type: application/x-www-form-urlencoded'
                )

            );

            $response = curl_exec($ch);
            $response = preg_replace('/\'/', ' ', $response);
            $response = json_decode($response, true);

            // dd($response);

            // echo '<pre>';
            // print_r($response);
            // echo '</pre>';
            return $response;

        } else {

            echo "Server Error Could Not Process Your Request";
        }
    }

    // Attendance Get with ZOHO API
    public function testapiAttendance()
    {
        $dateTimeFrom = '2022-02-10';
        $dateTimeTo   = '2022-02-20';

        // $query = '{"select_query":"select Name, Contact_Name.First_Name, Site_Address, City1, State, PostcodeS, lat1, lon1, PHONE_NUMBER_1, Closing_Date, Total_Sale_KW, Business_Entity_Name, Lead_Source, CSR_Name, Owner, Owner.first_name, Owner.last_name from Sales where Closing_Date between \'' . $dateTimeFrom . '\' and ' . '\'' . $dateTimeTo . '\' ORDER BY Owner ASC"}';




        $testQuery = "SELECT
            'Query check in out'.'Employee_ID' As 'Employee ID',
            'Query check in out'.'Employee _Name' As 'Employee_Name',
            date_format('Query check in out'.'Date', 'dd/mm/yyyy') As 'Date',
            'Query check in out'.'Check_In' As 'Check In',
            'Query check in out'.'Check_Out' As 'Check Out',
            time_diff('Query check in out'.'Check_Out', 'Query check in out'.'Check_In') As 'Durations',
            'Current_Employee'.'Whatsapp No' As 'Whatsapp No'
            FROM  'Query check in out'
            JOIN 'Current_Employee' ON 'Query check in out'.'Employee_ID'  = 'Current_Employee'.'EMP ID'  ";

        // $query = '{"SELECT * FROM Sales"}';

        $post = [

            'refresh_token'    => '1000.599d68331f60e7655655996ab6ea2736.d35cb199948f9bb0ae9b2d12f9c31842',
            'client_id'        => '1000.72M4LTKEFTXUBUPVIW7NR0ILL4SS5P',
            'client_secret'    => '73aa4d57e99e2768e7ff7ce4e3623754a50507a746',
            'grant_type'        => 'refresh_token'
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.in/oauth/v2/token");

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


        $response = curl_exec($ch);
        $response = json_decode($response);

        // dd($response);

        if ($response != null) {
            $access_token = $response->access_token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://analyticsapi.zoho.in/");

            curl_setopt($ch, CURLOPT_POST, 1);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $testQuery);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Authorization: Zoho-oauthtoken ' . $access_token,
                    'Content-Type: application/x-www-form-urlencoded'
                )

            );

            $response = curl_exec($ch);
            $response = preg_replace('/\'/', ' ', $response);
            // $response = json_decode($response, true);

            dd($response);
        } else {

            echo "Server Error Could Not Process Your Request";
        }
    }
}
