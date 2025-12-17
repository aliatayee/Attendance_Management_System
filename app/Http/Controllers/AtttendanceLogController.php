<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AtttendanceLogController extends Controller
{
     public function index(): View
    {
        // Define the data payload (hardcoded as in original)
        $data = [
            "operation" => "fetch_log",
            "auth_user" => "tirono_ppa",
            "auth_code" => "iw1fcd25584jw79a6b7zr7twp452x4p",
            "start_date" => "2025-09-25",
            "end_date" => "2025-12-26",
            "start_time" => "08:49:09",
            "end_time" => "15:49:09",
            "access_id" => 103952415
        ];

        $datapayload = json_encode($data);

        // Use Laravel's Http facade for the POST request (replaces cURL)
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($datapayload)
        ])->post('https://rumytechnologies.com/rams/json_api', $data); // Pass as array for JSON serialization

        $result = $response->body();

        // Preserve original string manipulation logic (hacky but accurate to source)
        // Note: This assumes the response starts exactly with '{"log":' and ends with '}' – corrected for potential errors by checking if replacement occurred
        $replace_syntax = str_replace('{"log":', '', $result);
        if ($replace_syntax === $result) {
            // If no replacement, the format might be different; fallback to full decode
            $json_data = json_decode($result, true)['log'] ?? [];
        } else {
            $replace_syntax = substr($replace_syntax, 0, -1);
            $json_data = json_decode($replace_syntax, true); // Decode as assoc array for consistency
        }

        // For the loop: extract access_dates (preserving foreach logic)
        $access_dates = [];
        $user_names = [];
        if (is_array($json_data)) {
            foreach ($json_data as $item) {
                if (isset($item['access_date'])) {
                    $access_dates[] = $item['access_date'];
                }
                if (isset($item['user_name'])) {
                    $user_names[] = $item['user_name'];
                }
            }
        }

        // Pass to view: access_dates for printing, and replace_syntax string for echo (as in original)
        return view('admin.attendancelog', compact('access_dates', 'user_names', 'replace_syntax'));
    }
}
