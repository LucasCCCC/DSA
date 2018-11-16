<?php

/**
 * 给定一个单链表，返回其中的倒数第k个节点
 *
 * 第一个指针$pAhead先遍历k-1步，从第k步开始
 * 第二个指针$pBehind也开始遍历，使两个指针的
 * 距离保持在k-1，这样，当$pAhead走到链表尾节
 * 点时，$pBehind刚好指向倒数第k个几点。只需要
 * 遍历链表一次，即可完成查找。
 *
 * @param ListNode $head 链表的头结点
 * @param int $k 链表中的倒数第k个节点
 * @return ListNode $pBehind 返回已找到的倒数第k个节点
 */
function FindKthToTail($head, $k){

    //对于给定的链表，应当判断链表是否为空或得定的k的值是否合理
    if ($head == NULL || $k == 0){
        return NULL;
    }

    $pAhead = $head;
    $pBehind = $head;

    //$pAhead应当先遍历k-1步
    for ($i = 1;$i < $k;$i++){
        if ($pAhead->next == NULL){
            return NULL;
        }else{
            $pAhead = $pAhead->next;
        }
    }

    //从第k步开始，两个指针同时遍历，距离应当保持为k-1
    while ($pAhead->next != NULL){
        $pAhead = $pAhead->next;
        $pBehind = $pBehind->next;
    }

    return $pBehind;
}


