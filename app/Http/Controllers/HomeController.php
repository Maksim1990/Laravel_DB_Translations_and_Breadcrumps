<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\TranslationLoader\LanguageLine;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {

//        $t=LanguageLine::findOrFail(1);
//        //dd($t);
//        dd($t->text);


        return view('home');
    }



    public function translate($lang)
    {
        App::setLocale($lang);

        $translateItem=LanguageLine::all()->first();



        return view('translate',compact('translateItem'));
    }


    /**
     *
     * Method for updating DB label translation
     *
     * @param $lang
     * @return string
     */
    public function translateUpdate($lang)
    {
        App::setLocale($lang);

        $translateItem=LanguageLine::all()->first();
       $translateItem->labelno=1;
       $arrTranslationUpdated=$translateItem->text;


        //==== FOR UPDATING MORE THAN ONE LOCAL

        //       foreach ($arrTranslationUpdated as $lang=>$item){
        //           if($lang=='nl'){
        //               $arrTranslationUpdated[$lang]='Updated NL translate';
        //           }
        //       }


        //==== FOR UPDATING SPECIFIC LOCAL
        $arrTranslationUpdated['fr']='Updated FR translate';

        $translateItem->text=$arrTranslationUpdated;
        $translateItem->update();



        return 'Translation is updated!';
    }


    /**
     *
     * Method for deleting DB label translation
     *
     * @param $lang
     * @return string
     */
    public function translateDelete($lang)
    {
        App::setLocale($lang);

        $translateItem=LanguageLine::findOrFail(3);
        $translateItem->delete();



        return 'Translation is DELETED!';
    }

    /**
     *
     * Method for deleting DB label translation
     *
     * @param $lang
     * @return string
     */
    public function translateCreate($lang)
    {
        App::setLocale($lang);
        $languageLine=LanguageLine::create([
            'group' => 'validation',
            'key' => 'readonly',
            'text' => [
                'en' => 'This is a readonly',
                'nl' => 'Dit is readonly NL',
                'fr' => 'This is a readonly FR',
                'de' => 'This is a readonly DE'
            ],
        ]);



        return 'Translation is Created!';
    }



}
