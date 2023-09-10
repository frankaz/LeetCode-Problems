// 1290. Convert Binary Number in a Linked List to Integer
// Level: Easy
// https://leetcode.com/problems/convert-binary-number-in-a-linked-list-to-integer/

/**
 * Definition for singly-linked list.
 * class ListNode {
 *     val: number
 *     next: ListNode | null
 *     constructor(val?: number, next?: ListNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.next = (next===undefined ? null : next)
 *     }
 * }
 */

function getDecimalValue(head: ListNode | null): number {
    let str = "";

    while(head != null){
        str += head.val;
        head = head.next;
    }
    return parseInt(str, 2);
};