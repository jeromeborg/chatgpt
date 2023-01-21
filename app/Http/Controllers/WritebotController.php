<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class WritebotController extends Controller
{
    public function generateResponse(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'prompt' => 'required|string|max:1024'
        ]);

        // Set up the GPT-3 request
        $response = OpenAI::completions()->create([
            // 'engine' => 'davinci',
            'model' => 'text-davinci-003',
            'prompt' => $validatedData['prompt'],
            'max_tokens' => 2048,
            'temperature' => 0.5,
        ]);

        // Return the response
        // return response()->json([
        //     'response' => $response->choices[0]->text
        // ]);

        // Render the view and pass the response
        return view('writebot', [
            'response' => $response->choices[0]->text
        ]);
    }
}
