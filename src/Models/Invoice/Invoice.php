<?php

namespace KianKamgar\MoadianPhp\Models\Invoice;

class Invoice
{
    private array $header;
    private array $body;
    private array $payments;
    private array $extension;

    public function getHeader(): array
    {
        return $this->header;
    }

    public function setHeader(array $header): Invoice
    {
        $this->header = $header;
        return $this;
    }

    public function getBody(): array
    {
        return $this->body;
    }

    public function setBody(array $body): Invoice
    {
        $this->body = $body;
        return $this;
    }

    public function getPayments(): array
    {
        return $this->payments;
    }

    public function setPayments(array $payments): Invoice
    {
        $this->payments = $payments;
        return $this;
    }

    public function getExtension(): array
    {
        return $this->extension;
    }

    public function setExtension(array $extension): Invoice
    {
        $this->extension = $extension;
        return $this;
    }

    public function getInvoice(): array
    {
        return get_object_vars($this);
    }
}