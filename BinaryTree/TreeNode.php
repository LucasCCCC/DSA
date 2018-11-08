<?php

class TreeNode {
    var $val;
    var $left = NULL;
    var $right = NULL;

    function __construct($val) {
        $this->val = $val;
    }

    //构造二叉树
    function createBinaryTree(TreeNode $lchird = NULL, TreeNode $rchird = NULL) {
        if(!is_null($lchird))
            $this->left = $lchird;
        if(!is_null($rchird))
            $this->right = $rchird;
    }
}