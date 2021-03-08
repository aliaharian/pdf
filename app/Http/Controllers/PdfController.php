<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use lywzx\epub\EpubParser;
use Spatie\PdfToImage\Pdf;
use Org_Heigl\Ghostscript\Ghostscript;
use PharIo\Manifest\Manifest;
use SGH\PdfBox\PdfBox;
use stdClass;
use ZipArchive;

class PdfController extends Controller
{

    public function bookHandle($files, Request $request)
    {
        dd ($request->ip());
        // return Storage::download('public/' . $files);
    }

    public function unzip()
    {
        $zip = new ZipArchive;
        $res = $zip->open('test3.epub');
        if ($res === TRUE) {
            $zip->extractTo(public_path('/epub/modirmad/'));
            $zip->close();
            echo 'woot!';
        } else {
            echo 'doh!';
        }
    }

    public function index()
    {
        // return view('index');
        // return phpinfo();
        $epubParser = new EpubParser(public_path('test3.epub'));  // open file and check file is a validated epub

        $epubParser->parse();

        // dd($epubParser->getManifest());
        // dd($epubParser->getImage('cover'));
        // header('Content-Type: text/html; charset=utf-8');
        // header('Content-type:image/jpeg');
        // header("Content-Type: image/png");
        // header("Content-Length: " . filesize($name));
        $content = [];
        foreach ($epubParser->getManifest() as $key => $value) {
            // $tmp = new stdClass();
            // $tmp->name = $key;
            // $tmp->data = $value;
            if ($value['media-type'] == 'application/xhtml+xml') {
                array_push($content, $epubParser->getFile($key));
            }
            // else {
            //     array_push($content, $epubParser->getImage($key));
            // }
        }
        $svg = new SVGController();

        $svg->setFont(public_path('fonts/iransans2.svg'), 50, '#000');
        $svg->addText('یاو');

        // $svg->addAttribute("width", "800px");
        // $svg->addAttribute("height", "120px");
        echo $svg->asXML();
        dd($svg);
        // dd($epubParser);
        // dd($content[1]);
        // $a = $epubParser->getFile($content[3]);
        // return phpinfo();
        return view('index', compact('content'));
    }

    public function send(Request $request)
    {

        header('content-type: image/png'); // Use a variable for the image type
        // return view('index');
        // return phpinfo();
        $epubParser = new EpubParser(public_path('test.epub'));  // open file and check file is a validated epub
        $epubParser->parse();
        $a = $epubParser->getImage('cover');
        return $a;
    }

    public function iftest(Request $request)
    {

        // return view('index');
        // return phpinfo();
        $epubParser = new EpubParser(public_path('test3.epub'));  // open file and check file is a validated epub

        $epubParser->parse();

        // dd($epubParser->getManifest());
        // dd($epubParser->getImage('cover'));
        // header('Content-Type: text/html; charset=utf-8');
        // header('Content-type:image/jpeg');
        // header("Content-Type: image/png");
        // header("Content-Length: " . filesize($name));
        $content = [];
        foreach ($epubParser->getManifest() as $key => $value) {
            // $tmp = new stdClass();
            // $tmp->name = $key;
            // $tmp->data = $value;
            if ($value['media-type'] == 'application/xhtml+xml') {
                array_push($content, $epubParser->getFile($key));
            }
            // else {
            //     array_push($content, $epubParser->getImage($key));
            // }
        }
        $svg = new SVGController();

        $svg->setFont(public_path('fonts/iransans.svg'), 50, '#ff0000');
        $svg->addText('حمید');

        // $svg->addAttribute("width", "800px");
        // $svg->addAttribute("height", "120px");
        // echo $svg->asXML();
        // dd ($svg);
        // dd($epubParser);
        // dd($content[1]);
        // $a = $epubParser->getFile($content[3]);
        // return phpinfo();
        return view('iframe', compact('content'));
    }
}
