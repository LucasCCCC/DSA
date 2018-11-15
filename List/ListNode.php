<?php

class ListNode
{
    public $val;
    public $next = NULL;
    function __construct($val) {
        $this->val = $val;
    }
}

function addNode($head,$val) {
    $cur = $head;
    while (!is_null($cur->next)) {
        $cur = $cur->next;
    }
    $new = new ListNode($val);
    $cur->next = $new;
}

function showNode($head) {
    $cur = $head;
    while (!is_null($cur->next)){
        $cur = $cur->next;
        echo $cur->val."\n";
    }
}