// 21. Merge Two Sorted Lists
// Level: Easy
// https://leetcode.com/problems/merge-two-sorted-lists/

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

function mergeTwoLists(list1: ListNode | null, list2: ListNode | null): ListNode | null {
    let mergedList:ListNode = new ListNode();
    let tail = mergedList;

    while(list1 != null && list2 != null){
        if(list1.val < list2.val){
            tail.next = list1;
            list1 = list1.next;
        }
        else{
            tail.next = list2;
            list2 = list2.next;
        }
        tail = tail.next;
    }

    tail.next = list1 ?? list2;
    return mergedList.next;
};