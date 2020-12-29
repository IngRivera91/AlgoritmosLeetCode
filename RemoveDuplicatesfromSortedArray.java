// https://leetcode.com/problems/remove-duplicates-from-sorted-array/

public class RemoveDuplicatesfromSortedArray {

    public static void main (String [] args) {

    }

    public static int removeDuplicates(int[] nums) {

        if (nums.length == 0) { // Fuera D
            return 0;
        }

        int memoria = nums[0] + 1;
        int index = 0;

        for (int i : nums) {
            if (i != memoria ) {
                nums[index] = i;
                index++;
                memoria = i;
            }
        }

        return index; // Fuera D return index+1;
    }
}
