<?php


/**
 * 反转链表
 * 输入一个链表，反转链表后，输出新链表的表头。
 *
 * 为保证反转后的链表不会断裂，采用三个指针，分
 * 别保存当前节点，当前节点的前一节点，以及当前
 * 节点的后一节点。
 *
 * @param ListNode $head
 * @return ListNode $pReversedHead 反转过的链表
 */
function ReverseList($head) {

    $pReversedHead = NULL;
    $pNode = $head;
    $pPrev = NULL;
    while($pNode != NULL){
        $pNext = $pNode->next;

        if($pNext == NULL){
            $pReversedHead = $pNode;
        }

        $pNode->next = $pPrev;

        $pPrev = $pNode;
        $pNode = $pNext;
    }
    return $pReversedHead;
}