<?php

class StrUtils{
    private String $str;

    /**
     * StrUtils constructor.
     * @param String $str
     */
    public function __construct(string $str)
    {
        $this->setStr($str);
    }

    /**
     * Return the string
     * @return String
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * Set the string
     * @param String $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * Return a bold text
     * @return String
     */
    public function bold(): String{
        return "<span style='font-weight: bold;'>".$this->getStr()."</span>";
    }

    /**
     * Return an italic text
     * @return String
     */
    public function italic(): String{
        return "<span style='font-style: italic;'>".$this->getStr()."</span>";
    }

    /**
     * Return an underline text
     * @return String
     */
    public function underline(): String{
        return "<span style='text-decoration: underline;'>".$this->getStr()."</span>";
    }

    /**
     * Return a capitalize text
     * @return String
     */
    public function capitalize(): String{
        return "<span style='text-transform: capitalize;'>".$this->getStr()."</span>";
    }

    /**
     * Return a bold, italic and underline text using the other methode
     * @return String
     */
    public function uglify(): String{
        return "<span style='text-decoration: underline; font-style: italic; font-weight: bold;'>".$this->getStr()."</span>";
    }

}