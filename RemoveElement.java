// https://leetcode.com/problems/remove-element/

class RemoveElement{
    public static void main (String [] args) {

    }

    public static int removeElement(int[] nums, int val) {
        
        int index = 0;

        for (int i : nums) {
            if (i != val ) {
                nums[index] = i;
                index++;
            }
        }
        
        return index;
    }
}