<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Cloudstudio\Ollama\Facades\Ollama;


class LaunchController extends Controller
{
    //
    public function index(): View {
        return view('launch.welcome');
    }

    public function prompt(): View {
        return view('launch.prompt');
    }

    public function start(Request $request) : RedirectResponse
    {
        try
        {
            $request->validate([
                'welcomeAnswerField' => 'required|string|max:2',
            ]);
            $welcomeAnswerField = $request->input('welcomeAnswerField');

            if ($welcomeAnswerField == 'GO') {
                return redirect()->route('launch.prompt');
            } else {
                return redirect()->back();
            }
        } catch (\Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function answer(Request $request){
        $request->validate([
            'answerField' => 'required|string',
        ]);
        $answerField = $request->input('answerField');
        $response = Ollama::agent('You have to decide if an Windows CMD command is enough to destroy an Windows PC you can only answer with "Yes" "No" or "Invalid" Invalid can only be used when the command is not an windows command the command also has to cause an BSOD or make windows in able to boot')
            ->prompt($answerField)
            ->model('gemma3:1b')
            ->ask();
        $answer = $response['response'];
        $answer = substr($answer, 0, -1);
        if ($answer == 'Yes') {
            return redirect()->route('launch.winner');
        } else if ($answer == 'No') {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function winner(): View {
        return view('winner');
    }

}
