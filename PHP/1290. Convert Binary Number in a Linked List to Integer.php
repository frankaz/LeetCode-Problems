<?php
// 1290. Convert Binary Number in a Linked List to Integer
// Level: Easy
// https://leetcode.com/problems/convert-binary-number-in-a-linked-list-to-integer/

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

  function getDecimalValue($head)
  {
    $str = "";

    while ($head != null) {
      $str .= $head->val;
      $head = $head->next;
    }

    return intval($str, 2);
  }
}
