<?php

namespace Merlion\Type;

class CommandResult
{

    /**
     * @var int
     */
    private $operation_no;

    /**
     * @var string
     */
    private $CreateTime;

    /**
     * @var string
     */
    private $ProcessingTime;

    /**
     * @var string
     */
    private $EndingTime;

    /**
     * @var string
     */
    private $ProcessingResult;

    /**
     * @var string
     */
    private $DocumentNo;

    /**
     * @var string
     */
    private $DocumentNo2;

    /**
     * @var string
     */
    private $ProcessingResultComment;

    /**
     * @var string
     */
    private $ErrorText;

    /**
     * @var string
     */
    private $ProcessingReserved;

    /**
     * @var int
     */
    private $OperationLineNo;

    /**
     * @return int
     */
    public function getOperation_no()
    {
        return $this->operation_no;
    }

    /**
     * @param int $operation_no
     * @return CommandResult
     */
    public function withOperation_no($operation_no)
    {
        $new = clone $this;
        $new->operation_no = $operation_no;

        return $new;
    }

    /**
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * @param string $CreateTime
     * @return CommandResult
     */
    public function withCreateTime($CreateTime)
    {
        $new = clone $this;
        $new->CreateTime = $CreateTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcessingTime()
    {
        return $this->ProcessingTime;
    }

    /**
     * @param string $ProcessingTime
     * @return CommandResult
     */
    public function withProcessingTime($ProcessingTime)
    {
        $new = clone $this;
        $new->ProcessingTime = $ProcessingTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndingTime()
    {
        return $this->EndingTime;
    }

    /**
     * @param string $EndingTime
     * @return CommandResult
     */
    public function withEndingTime($EndingTime)
    {
        $new = clone $this;
        $new->EndingTime = $EndingTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcessingResult()
    {
        return $this->ProcessingResult;
    }

    /**
     * @param string $ProcessingResult
     * @return CommandResult
     */
    public function withProcessingResult($ProcessingResult)
    {
        $new = clone $this;
        $new->ProcessingResult = $ProcessingResult;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentNo()
    {
        return $this->DocumentNo;
    }

    /**
     * @param string $DocumentNo
     * @return CommandResult
     */
    public function withDocumentNo($DocumentNo)
    {
        $new = clone $this;
        $new->DocumentNo = $DocumentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentNo2()
    {
        return $this->DocumentNo2;
    }

    /**
     * @param string $DocumentNo2
     * @return CommandResult
     */
    public function withDocumentNo2($DocumentNo2)
    {
        $new = clone $this;
        $new->DocumentNo2 = $DocumentNo2;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcessingResultComment()
    {
        return $this->ProcessingResultComment;
    }

    /**
     * @param string $ProcessingResultComment
     * @return CommandResult
     */
    public function withProcessingResultComment($ProcessingResultComment)
    {
        $new = clone $this;
        $new->ProcessingResultComment = $ProcessingResultComment;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
        return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return CommandResult
     */
    public function withErrorText($ErrorText)
    {
        $new = clone $this;
        $new->ErrorText = $ErrorText;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcessingReserved()
    {
        return $this->ProcessingReserved;
    }

    /**
     * @param string $ProcessingReserved
     * @return CommandResult
     */
    public function withProcessingReserved($ProcessingReserved)
    {
        $new = clone $this;
        $new->ProcessingReserved = $ProcessingReserved;

        return $new;
    }

    /**
     * @return int
     */
    public function getOperationLineNo()
    {
        return $this->OperationLineNo;
    }

    /**
     * @param int $OperationLineNo
     * @return CommandResult
     */
    public function withOperationLineNo($OperationLineNo)
    {
        $new = clone $this;
        $new->OperationLineNo = $OperationLineNo;

        return $new;
    }


}

