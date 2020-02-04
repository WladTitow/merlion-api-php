<?php

namespace Merlion\Type;

class OrdersListResult
{

    /**
     * @var string
     */
    private $document_no;

    /**
     * @var string
     */
    private $PostedDocumentNo;

    /**
     * @var string
     */
    private $TNN;

    /**
     * @var string
     */
    private $OrderDate;

    /**
     * @var string
     */
    private $Manager;

    /**
     * @var string
     */
    private $Contact;

    /**
     * @var string
     */
    private $ShipmentMethod;

    /**
     * @var string
     */
    private $ShipmentMethodCode;

    /**
     * @var string
     */
    private $ShipmentDate;

    /**
     * @var string
     */
    private $ActualShipmentDate;

    /**
     * @var string
     */
    private $CounterpartyClient;

    /**
     * @var string
     */
    private $CounterpartyClientCode;

    /**
     * @var string
     */
    private $ShippingAgent;

    /**
     * @var string
     */
    private $ShippingAgentCode;

    /**
     * @var string
     */
    private $EndCustomer;

    /**
     * @var string
     */
    private $PostingDescription;

    /**
     * @var string
     */
    private $Weight;

    /**
     * @var float
     */
    private $Volume;

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var float
     */
    private $AmountRUR;

    /**
     * @var string
     */
    private $WillDeleteTomorrow;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $EndPointCity;

    /**
     * @var string
     */
    private $EndPointAdress;

    /**
     * @var string
     */
    private $EndPointContact;

    /**
     * @var string
     */
    private $PackingType;

    /**
     * @var string
     */
    private $Representative;

    /**
     * @var string
     */
    private $InvoiceNo;

    /**
     * @var string
     */
    private $ContractId;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return OrdersListResult
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostedDocumentNo()
    {
        return $this->PostedDocumentNo;
    }

    /**
     * @param string $PostedDocumentNo
     * @return OrdersListResult
     */
    public function withPostedDocumentNo($PostedDocumentNo)
    {
        $new = clone $this;
        $new->PostedDocumentNo = $PostedDocumentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getTNN()
    {
        return $this->TNN;
    }

    /**
     * @param string $TNN
     * @return OrdersListResult
     */
    public function withTNN($TNN)
    {
        $new = clone $this;
        $new->TNN = $TNN;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param string $OrderDate
     * @return OrdersListResult
     */
    public function withOrderDate($OrderDate)
    {
        $new = clone $this;
        $new->OrderDate = $OrderDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getManager()
    {
        return $this->Manager;
    }

    /**
     * @param string $Manager
     * @return OrdersListResult
     */
    public function withManager($Manager)
    {
        $new = clone $this;
        $new->Manager = $Manager;

        return $new;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return OrdersListResult
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentMethod()
    {
        return $this->ShipmentMethod;
    }

    /**
     * @param string $ShipmentMethod
     * @return OrdersListResult
     */
    public function withShipmentMethod($ShipmentMethod)
    {
        $new = clone $this;
        $new->ShipmentMethod = $ShipmentMethod;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentMethodCode()
    {
        return $this->ShipmentMethodCode;
    }

    /**
     * @param string $ShipmentMethodCode
     * @return OrdersListResult
     */
    public function withShipmentMethodCode($ShipmentMethodCode)
    {
        $new = clone $this;
        $new->ShipmentMethodCode = $ShipmentMethodCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->ShipmentDate;
    }

    /**
     * @param string $ShipmentDate
     * @return OrdersListResult
     */
    public function withShipmentDate($ShipmentDate)
    {
        $new = clone $this;
        $new->ShipmentDate = $ShipmentDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getActualShipmentDate()
    {
        return $this->ActualShipmentDate;
    }

    /**
     * @param string $ActualShipmentDate
     * @return OrdersListResult
     */
    public function withActualShipmentDate($ActualShipmentDate)
    {
        $new = clone $this;
        $new->ActualShipmentDate = $ActualShipmentDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCounterpartyClient()
    {
        return $this->CounterpartyClient;
    }

    /**
     * @param string $CounterpartyClient
     * @return OrdersListResult
     */
    public function withCounterpartyClient($CounterpartyClient)
    {
        $new = clone $this;
        $new->CounterpartyClient = $CounterpartyClient;

        return $new;
    }

    /**
     * @return string
     */
    public function getCounterpartyClientCode()
    {
        return $this->CounterpartyClientCode;
    }

    /**
     * @param string $CounterpartyClientCode
     * @return OrdersListResult
     */
    public function withCounterpartyClientCode($CounterpartyClientCode)
    {
        $new = clone $this;
        $new->CounterpartyClientCode = $CounterpartyClientCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAgent()
    {
        return $this->ShippingAgent;
    }

    /**
     * @param string $ShippingAgent
     * @return OrdersListResult
     */
    public function withShippingAgent($ShippingAgent)
    {
        $new = clone $this;
        $new->ShippingAgent = $ShippingAgent;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAgentCode()
    {
        return $this->ShippingAgentCode;
    }

    /**
     * @param string $ShippingAgentCode
     * @return OrdersListResult
     */
    public function withShippingAgentCode($ShippingAgentCode)
    {
        $new = clone $this;
        $new->ShippingAgentCode = $ShippingAgentCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndCustomer()
    {
        return $this->EndCustomer;
    }

    /**
     * @param string $EndCustomer
     * @return OrdersListResult
     */
    public function withEndCustomer($EndCustomer)
    {
        $new = clone $this;
        $new->EndCustomer = $EndCustomer;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostingDescription()
    {
        return $this->PostingDescription;
    }

    /**
     * @param string $PostingDescription
     * @return OrdersListResult
     */
    public function withPostingDescription($PostingDescription)
    {
        $new = clone $this;
        $new->PostingDescription = $PostingDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return OrdersListResult
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return OrdersListResult
     */
    public function withVolume($Volume)
    {
        $new = clone $this;
        $new->Volume = $Volume;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return OrdersListResult
     */
    public function withAmount($Amount)
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountRUR()
    {
        return $this->AmountRUR;
    }

    /**
     * @param float $AmountRUR
     * @return OrdersListResult
     */
    public function withAmountRUR($AmountRUR)
    {
        $new = clone $this;
        $new->AmountRUR = $AmountRUR;

        return $new;
    }

    /**
     * @return string
     */
    public function getWillDeleteTomorrow()
    {
        return $this->WillDeleteTomorrow;
    }

    /**
     * @param string $WillDeleteTomorrow
     * @return OrdersListResult
     */
    public function withWillDeleteTomorrow($WillDeleteTomorrow)
    {
        $new = clone $this;
        $new->WillDeleteTomorrow = $WillDeleteTomorrow;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return OrdersListResult
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndPointCity()
    {
        return $this->EndPointCity;
    }

    /**
     * @param string $EndPointCity
     * @return OrdersListResult
     */
    public function withEndPointCity($EndPointCity)
    {
        $new = clone $this;
        $new->EndPointCity = $EndPointCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndPointAdress()
    {
        return $this->EndPointAdress;
    }

    /**
     * @param string $EndPointAdress
     * @return OrdersListResult
     */
    public function withEndPointAdress($EndPointAdress)
    {
        $new = clone $this;
        $new->EndPointAdress = $EndPointAdress;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndPointContact()
    {
        return $this->EndPointContact;
    }

    /**
     * @param string $EndPointContact
     * @return OrdersListResult
     */
    public function withEndPointContact($EndPointContact)
    {
        $new = clone $this;
        $new->EndPointContact = $EndPointContact;

        return $new;
    }

    /**
     * @return string
     */
    public function getPackingType()
    {
        return $this->PackingType;
    }

    /**
     * @param string $PackingType
     * @return OrdersListResult
     */
    public function withPackingType($PackingType)
    {
        $new = clone $this;
        $new->PackingType = $PackingType;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepresentative()
    {
        return $this->Representative;
    }

    /**
     * @param string $Representative
     * @return OrdersListResult
     */
    public function withRepresentative($Representative)
    {
        $new = clone $this;
        $new->Representative = $Representative;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return OrdersListResult
     */
    public function withInvoiceNo($InvoiceNo)
    {
        $new = clone $this;
        $new->InvoiceNo = $InvoiceNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractId()
    {
        return $this->ContractId;
    }

    /**
     * @param string $ContractId
     * @return OrdersListResult
     */
    public function withContractId($ContractId)
    {
        $new = clone $this;
        $new->ContractId = $ContractId;

        return $new;
    }


}

