<?php

namespace xtype\Ethereum;

class Tool{
    /**
     * 字符串长度 ‘0’左补齐
     * @param string $str   原始字符串
     * @param int $bit      字符串总长度
     * @return string       真实字符串
     */
    static function fill0($str, $bit=64){
        if(!strlen($str)) return "";
        $str_len = strlen($str);
        $zero = '';
        for($i=$str_len; $i<$bit; $i++){
            $zero .= "0";
        }
        $real_str = $zero . $str;
        return $real_str;
    }
}