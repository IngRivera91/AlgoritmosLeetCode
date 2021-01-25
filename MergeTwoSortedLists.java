// https://leetcode.com/problems/merge-two-sorted-lists/

public class MergeTwoSortedLists {

    public static void main (String [] args) {
        ListNode l1 = new ListNode(1);
        ListNode l2 = new ListNode(1, new ListNode(3, new ListNode(4)));

        ImprimeListNode(AddIntToList(l1, 2));
        
    }

    public static ListNode mergeTwoLists(ListNode l1, ListNode l2) {

        if (l1 == null && l2 == null){ return null; } 
        if (l1 == null ) { return l2; }
        if (l2 == null ) { return l1; }

        ListNode actual = l1;

        while (actual != null) {
            ListNode[] respuesta = AddIntToList(l2, actual.val);
            l2 = respuesta[0];
            actual = actual.next;
        }


        return l2;
    }

    public static ListNode[] AddIntToList(ListNode lista, int numero){

        ListNode actual = lista;
        ListNode objetivo = null;

        while (actual != null) {
            if ( actual.val > numero) { break; }

            if ( actual.val == numero || actual.val < numero )  {
                objetivo = actual;
            }
            actual = actual.next;
        }

        if (objetivo != null) {
            ListNode nuevo = new ListNode(numero,objetivo.next);
            objetivo.next = nuevo;
            ListNode[] respuesta = {lista,nuevo};
            return respuesta;
        } 

        ListNode[] respuesta = {new ListNode(numero,lista),null};
        return respuesta;
        

        
    }

    public static void ImprimeListNode(ListNode list) {
        ListNode actual = list;
        System.out.println("");
        System.out.print("[ ");
        while (actual != null) {
            System.out.print(actual.val+" ");
            actual = actual.next;
        }
        System.out.println("]");
    }

}


