<?php

include_once 'TreeNode.php';

/*
题目：输入某二叉树的前序遍历和中序遍历的结果，
请重建该二叉树。假设输入的前序遍历和中序遍历的
结果中都不含重复的数字。例如，输入前序遍历序列
{1，2，4，7，3，5，6，8}
和中序遍历序列
{4，7，2，1，5，3，8，6}，
则重建二叉树并输出它的头节点。二
叉树节点的定义如下：
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}
*/

/**
 * @param $pre 前序遍历的结果
 * @param $vin 中序遍历的结果
 * @return TreeNode|void 重建好的二叉树
 */
function reConstructBinaryTree($pre, $vin)
{
    return build($pre, $vin, 0, count($pre)-1, 0, count($vin)-1);
}

/**
 * @param $pre 前序遍历了的结果
 * @param $inorder 中序遍历的结果
 * @param $pstart 前序遍历的首元素位置
 * @param $pend 前序遍历的末尾元素的位置
 * @param $istart 中序遍历的首元素位置
 * @param $iend 中序遍历的末尾元素的位置
 * @return TreeNode|void 重建好的二叉树
 */
function build($pre, $inorder, $pstart, $pend, $istart, $iend) {
    if ($pstart > $pend || $istart > $iend)return;
    $root = $pre[$pstart];

    for($find = $istart; $find <= $iend;$find++){
        if($root === $inorder[$find]){
            break;
        }
    }

    $len = $find-$istart;//左子树长度
    $res = new TreeNode($inorder[$find]);
    $res->left = build($pre, $inorder, $pstart+1, $pstart+$len,$istart,$find-1);
    $res->right = build($pre, $inorder ,$pstart+$len+1, $pend,$find+1, count($inorder)-1);
    return $res;
}

?>