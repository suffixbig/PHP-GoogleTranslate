<?php
class TextTranslate
{
    public $en = array();
    public $tw = array();
    const fileen = "translate_en.txt";
    const filetw = "translate_tw.txt";
    public function __construct()
    {
        $s1     = 0;
        $s2     = 0;
        $en =array();
        $tw =array();
        $file   = fopen(self::fileen, "r"); //輸出文本中所有的行，直到文件結束為止。
        while (!feof($file)) {
            $en[] = str_replace("\n", '',fgets($file));
            $s1++;
        }
        fclose($file);
        $file   = fopen(self::filetw, "r"); //輸出文本中所有的行，直到文件結束為止。
        while (!feof($file)) {
            $tw[] = str_replace("\n", '',fgets($file));
            $s2++;
        }
        fclose($file);

        if ($s1 != $s2) {
            echo $s1, ",", $s2, "兩檔案行數不一致";
        }else{
            $this->tw=$tw;
            $this->en=$en;
            //print_r($en);
        }
    }
    
    //取出繁體翻譯
    public function get_tw($text)
    {
        $text=trim($text);
        for ($i = 0; $i < count($this->en); $i++) {
            $text2 = $this->en[$i];
            if ($text == $text2) {
                return $this->tw[$i];
            }
        }

    }
    public static function translate($source, $target, $text)
    {
    }
}
