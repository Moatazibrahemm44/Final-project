<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Log;

class ChatbotController extends Controller
{
    public function executePythonScript(Request $request)
    {
        $pythonPath = 'C:\\Users\\Lenovo\\AppData\\Local\\Microsoft\\WindowsApps\\python.exe';
        $scriptPath = 'D:\\Moatazibrahemm\\Final Project\\FinalProject\\public\\chatbot-deployment\\script.py';
    
        $process = new Process([$pythonPath, $scriptPath]);
        $process->setWorkingDirectory('D:\\Moatazibrahemm\\Final Project\\FinalProject\\public\\chatbot-deployment');
    
        try {
            $process->mustRun(); // This will throw a ProcessFailedException on failure
            $output = $process->getOutput();
            $errorOutput = $process->getErrorOutput();

            // Log the outputs for debugging
            Log::info('Python Script Output: ' . $output);
            Log::error('Python Script Error Output: ' . $errorOutput);

            return response()->json(['output' => $output, 'error' => $errorOutput]);
        } catch (ProcessFailedException $exception) {
            $errorOutput = $exception->getProcess()->getErrorOutput();
            // Log the error output for debugging purposes
            Log::error('Process Failed: ' . $errorOutput);
            return response()->json(['error' => $errorOutput], 500);
        }
    }
}
  
