<?php

namespace App\Models\forms;

class Contato
{
    private string $name;
    private string $email;
    private string $event;
    private string $date;
    private string $hours;
    private string $locale;
    private string $message;
    private string $phone;
    private string $subject;

    /**
     * @param string $name
     * @param string $email
     * @param string $event
     * @param string $date
     * @param string $hours
     * @param string $locale
     * @param string $message
     * @param string $phone
     */
    public function __construct(string $name, string $email, string $event, string $date, string $hours, string $locale, string $message, string $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->event = $event;
        $this->date = $date;
        $this->hours = $hours;
        $this->locale = $locale;
        $this->message = $message;
        $this->phone = $phone;
        $this->setSubject("ORÇAMENTO PARA - " . $this->event);
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent(string $event): void
    {
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getHours(): string
    {
        return $this->hours;
    }

    /**
     * @param string $hours
     */
    public function setHours(string $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }



}
