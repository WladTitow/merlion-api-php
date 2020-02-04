<?php

namespace Merlion;

use Merlion\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class MerlionClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\HelloWorld $parameters
     * @return ResultInterface|Type\HelloWorldResponse
     * @throws SoapException
     */
    public function helloWorld(\Merlion\Type\HelloWorld $parameters) : \Merlion\Type\HelloWorldResponse
    {
        return $this->call('helloWorld', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCatalog $parameters
     * @return ResultInterface|Type\GetCatalogResponse
     * @throws SoapException
     */
    public function getCatalog(\Merlion\Type\GetCatalog $parameters) : \Merlion\Type\GetCatalogResponse
    {
        return $this->call('getCatalog', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItems $parameters
     * @return ResultInterface|Type\GetItemsResponse
     * @throws SoapException
     */
    public function getItems(\Merlion\Type\GetItems $parameters) : \Merlion\Type\GetItemsResponse
    {
        return $this->call('getItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsAvail $parameters
     * @return ResultInterface|Type\GetItemsAvailResponse
     * @throws SoapException
     */
    public function getItemsAvail(\Merlion\Type\GetItemsAvail $parameters) : \Merlion\Type\GetItemsAvailResponse
    {
        return $this->call('getItemsAvail', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetShipmentDates $parameters
     * @return ResultInterface|Type\GetShipmentDatesResponse
     * @throws SoapException
     */
    public function getShipmentDates(\Merlion\Type\GetShipmentDates $parameters) : \Merlion\Type\GetShipmentDatesResponse
    {
        return $this->call('getShipmentDates', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetShipmentMethods $parameters
     * @return ResultInterface|Type\GetShipmentMethodsResponse
     * @throws SoapException
     */
    public function getShipmentMethods(\Merlion\Type\GetShipmentMethods $parameters) : \Merlion\Type\GetShipmentMethodsResponse
    {
        return $this->call('getShipmentMethods', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCommandResult $parameters
     * @return ResultInterface|Type\GetCommandResultResponse
     * @throws SoapException
     */
    public function getCommandResult(\Merlion\Type\GetCommandResult $parameters) : \Merlion\Type\GetCommandResultResponse
    {
        return $this->call('getCommandResult', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCommandResultDetails $parameters
     * @return ResultInterface|Type\GetCommandResultDetailsResponse
     * @throws SoapException
     */
    public function getCommandResultDetails(\Merlion\Type\GetCommandResultDetails $parameters) : \Merlion\Type\GetCommandResultDetailsResponse
    {
        return $this->call('getCommandResultDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetOrderHeaderCommand $parameters
     * @return ResultInterface|Type\SetOrderHeaderCommandResponse
     * @throws SoapException
     */
    public function setOrderHeaderCommand(\Merlion\Type\SetOrderHeaderCommand $parameters) : \Merlion\Type\SetOrderHeaderCommandResponse
    {
        return $this->call('setOrderHeaderCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetOrderLineCommand $parameters
     * @return ResultInterface|Type\SetOrderLineCommandResponse
     * @throws SoapException
     */
    public function setOrderLineCommand(\Merlion\Type\SetOrderLineCommand $parameters) : \Merlion\Type\SetOrderLineCommandResponse
    {
        return $this->call('setOrderLineCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsProperties $parameters
     * @return ResultInterface|Type\GetItemsPropertiesResponse
     * @throws SoapException
     */
    public function getItemsProperties(\Merlion\Type\GetItemsProperties $parameters) : \Merlion\Type\GetItemsPropertiesResponse
    {
        return $this->call('getItemsProperties', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsPropertiesSections $parameters
     * @return ResultInterface|Type\GetItemsPropertiesSectionsResponse
     * @throws SoapException
     */
    public function getItemsPropertiesSections(\Merlion\Type\GetItemsPropertiesSections $parameters) : \Merlion\Type\GetItemsPropertiesSectionsResponse
    {
        return $this->call('getItemsPropertiesSections', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsImages $parameters
     * @return ResultInterface|Type\GetItemsImagesResponse
     * @throws SoapException
     */
    public function getItemsImages(\Merlion\Type\GetItemsImages $parameters) : \Merlion\Type\GetItemsImagesResponse
    {
        return $this->call('getItemsImages', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetAddOrderLineCommand $parameters
     * @return ResultInterface|Type\SetAddOrderLineCommandResponse
     * @throws SoapException
     */
    public function setAddOrderLineCommand(\Merlion\Type\SetAddOrderLineCommand $parameters) : \Merlion\Type\SetAddOrderLineCommandResponse
    {
        return $this->call('setAddOrderLineCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetMoveOrderLineCommand $parameters
     * @return ResultInterface|Type\SetMoveOrderLineCommandResponse
     * @throws SoapException
     */
    public function setMoveOrderLineCommand(\Merlion\Type\SetMoveOrderLineCommand $parameters) : \Merlion\Type\SetMoveOrderLineCommandResponse
    {
        return $this->call('setMoveOrderLineCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetDeleteOrderCommand $parameters
     * @return ResultInterface|Type\SetDeleteOrderCommandResponse
     * @throws SoapException
     */
    public function setDeleteOrderCommand(\Merlion\Type\SetDeleteOrderCommand $parameters) : \Merlion\Type\SetDeleteOrderCommandResponse
    {
        return $this->call('setDeleteOrderCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetSignOrderCommand $parameters
     * @return ResultInterface|Type\SetSignOrderCommandResponse
     * @throws SoapException
     */
    public function setSignOrderCommand(\Merlion\Type\SetSignOrderCommand $parameters) : \Merlion\Type\SetSignOrderCommandResponse
    {
        return $this->call('setSignOrderCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\UnsetSignOrderCommand $parameters
     * @return ResultInterface|Type\UnsetSignOrderCommandResponse
     * @throws SoapException
     */
    public function unsetSignOrderCommand(\Merlion\Type\UnsetSignOrderCommand $parameters) : \Merlion\Type\UnsetSignOrderCommandResponse
    {
        return $this->call('unsetSignOrderCommand', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOrdersList $parameters
     * @return ResultInterface|Type\GetOrdersListResponse
     * @throws SoapException
     */
    public function getOrdersList(\Merlion\Type\GetOrdersList $parameters) : \Merlion\Type\GetOrdersListResponse
    {
        return $this->call('getOrdersList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOrderLines $parameters
     * @return ResultInterface|Type\GetOrderLinesResponse
     * @throws SoapException
     */
    public function getOrderLines(\Merlion\Type\GetOrderLines $parameters) : \Merlion\Type\GetOrderLinesResponse
    {
        return $this->call('getOrderLines', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOrderLinesGTD $parameters
     * @return ResultInterface|Type\GetOrderLinesGTDResponse
     * @throws SoapException
     */
    public function getOrderLinesGTD(\Merlion\Type\GetOrderLinesGTD $parameters) : \Merlion\Type\GetOrderLinesGTDResponse
    {
        return $this->call('getOrderLinesGTD', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCounterAgent $parameters
     * @return ResultInterface|Type\GetCounterAgentResponse
     * @throws SoapException
     */
    public function getCounterAgent(\Merlion\Type\GetCounterAgent $parameters) : \Merlion\Type\GetCounterAgentResponse
    {
        return $this->call('getCounterAgent', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetContracts $parameters
     * @return ResultInterface|Type\GetContractsResponse
     * @throws SoapException
     */
    public function getContracts(\Merlion\Type\GetContracts $parameters) : \Merlion\Type\GetContractsResponse
    {
        return $this->call('getContracts', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetShipmentAgents $parameters
     * @return ResultInterface|Type\GetShipmentAgentsResponse
     * @throws SoapException
     */
    public function getShipmentAgents(\Merlion\Type\GetShipmentAgents $parameters) : \Merlion\Type\GetShipmentAgentsResponse
    {
        return $this->call('getShipmentAgents', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetRepresentative $parameters
     * @return ResultInterface|Type\GetRepresentativeResponse
     * @throws SoapException
     */
    public function getRepresentative(\Merlion\Type\GetRepresentative $parameters) : \Merlion\Type\GetRepresentativeResponse
    {
        return $this->call('getRepresentative', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetEndPointDelivery $parameters
     * @return ResultInterface|Type\GetEndPointDeliveryResponse
     * @throws SoapException
     */
    public function getEndPointDelivery(\Merlion\Type\GetEndPointDelivery $parameters) : \Merlion\Type\GetEndPointDeliveryResponse
    {
        return $this->call('getEndPointDelivery', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetPackingTypes $parameters
     * @return ResultInterface|Type\GetPackingTypesResponse
     * @throws SoapException
     */
    public function getPackingTypes(\Merlion\Type\GetPackingTypes $parameters) : \Merlion\Type\GetPackingTypesResponse
    {
        return $this->call('getPackingTypes', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCurrencyRate $parameters
     * @return ResultInterface|Type\GetCurrencyRateResponse
     * @throws SoapException
     */
    public function getCurrencyRate(\Merlion\Type\GetCurrencyRate $parameters) : \Merlion\Type\GetCurrencyRateResponse
    {
        return $this->call('getCurrencyRate', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCountry $parameters
     * @return ResultInterface|Type\GetCountryResponse
     * @throws SoapException
     */
    public function getCountry(\Merlion\Type\GetCountry $parameters) : \Merlion\Type\GetCountryResponse
    {
        return $this->call('getCountry', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsBarcodes $parameters
     * @return ResultInterface|Type\GetItemsBarcodesResponse
     * @throws SoapException
     */
    public function getItemsBarcodes(\Merlion\Type\GetItemsBarcodes $parameters) : \Merlion\Type\GetItemsBarcodesResponse
    {
        return $this->call('getItemsBarcodes', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLinkedItems $parameters
     * @return ResultInterface|Type\GetLinkedItemsResponse
     * @throws SoapException
     */
    public function getLinkedItems(\Merlion\Type\GetLinkedItems $parameters) : \Merlion\Type\GetLinkedItemsResponse
    {
        return $this->call('getLinkedItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetLinkedItems $parameters
     * @return ResultInterface|Type\SetLinkedItemsResponse
     * @throws SoapException
     */
    public function setLinkedItems(\Merlion\Type\SetLinkedItems $parameters) : \Merlion\Type\SetLinkedItemsResponse
    {
        return $this->call('setLinkedItems', $parameters);
    }


}

