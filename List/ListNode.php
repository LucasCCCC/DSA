<?php

/**
 * Class ListNode
 * 单链表类
 */
class ListNode
{
    public $val;
    public $next = NULL;

    function __construct($val) {
        $this->val = $val;
    }
}

/**
 * 添加节点
 * @param $head
 * @param $val
 */
function addNode($head,$val) {
    $cur = $head;
    while (!is_null($cur->next)) {
        $cur = $cur->next;
    }
    $new = new ListNode($val);
    $cur->next = $new;
}

/**
 * 打印节点中保存的$val
 * @param $head
 */
function showNode($head) {
    $cur = $head;
    while (!is_null($cur->next)){
        $cur = $cur->next;
        echo $cur->val."\n";
    }
}