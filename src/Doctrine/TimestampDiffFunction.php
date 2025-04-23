<?php

namespace App\Doctrine;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

class TimestampDiffFunction extends FunctionNode
{
    private $unit;
    private $startDate;
    private $endDate;

    public function parse(Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER); // TIMESTAMPDIFF
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        
        $this->unit = $parser->ArithmeticPrimary();
        
        $parser->match(Lexer::T_COMMA);
        $this->startDate = $parser->ArithmeticPrimary();
        
        $parser->match(Lexer::T_COMMA);
        $this->endDate = $parser->ArithmeticPrimary();
        
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $sqlWalker): string
    {
        return sprintf(
            'TIMESTAMPDIFF(%s, %s, %s)',
            $this->unit->dispatch($sqlWalker),
            $this->startDate->dispatch($sqlWalker),
            $this->endDate->dispatch($sqlWalker)
        );
    }
}