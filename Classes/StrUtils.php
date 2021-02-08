<?php

class StrUtils{
    private String $str;
    private Bool $flag;

    /**
     * StrUtils constructor.
     * @param String $str
     */
    public function __construct(string $str)
    {
        $this->setStr($str);
        $this->setFlag(true);
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
     * @return bool
     */
    public function isFlag(): bool
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     */
    public function setFlag(bool $flag): void
    {
        $this->flag = $flag;
    }

    /**
     * Return a bold text
     * @return String
     */
    public function bold(): String{
        if ($this->isFlag()) {
            $this->clearStr();
        }
        $this->setStr("<span style='font-weight: bold;'>".$this->getStr()."</span>");
        return $this->getStr();
    }

    /**
     * Return an italic text
     * @return String
     */
    public function italic(): String{
        if ($this->isFlag()) {
            $this->clearStr();
        }
        $this->setStr("<span style='font-style: italic;'>".$this->getStr()."</span>");
        return $this->getStr();
    }

    /**
     * Return an underline text
     * @return String
     */
    public function underline(): String{
        if ($this->isFlag()) {
            $this->clearStr();
        }
        $this->setStr("<span style='text-decoration: underline;'>".$this->getStr()."</span>");
        return $this->getStr();
    }

    /**
     * Return a capitalize text
     * @return String
     */
    public function capitalize(): String{
        if ($this->isFlag()) {
            $this->clearStr();
        }
        $this->setStr("<span style='text-transform: capitalize;'>".$this->getStr()."</span>");
        return $this->getStr();
    }

    /**
     * Return a bold, italic and underline text using the other methode
     * @return String
     */
    public function uglify(): String{
        $this->setFlag(false);
        $this->bold();
        $this->italic();
        $this->underline();
        $this->capitalize();

        $this->setFlag(true);
        return $this->getStr();
    }

    /**
     * Clear all tag html
     */
    private function clearStr(): void{
        $this->setStr(strip_tags($this->getStr()));
    }
}