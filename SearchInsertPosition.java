// https://leetcode.com/problems/search-insert-position/

public class SearchInsertPosition {

    public static void main (String [] args) {

    }

    public static int searchInsert(int[] nums, int target) {

        int resultado = 0;
        int repuesta = existeEnArray(nums, target);

        if ( repuesta != -1) {
            return repuesta;
        }
        // [1,3,5,6] 7

        int numeroActual;
        for (int i = 0 ; i < nums.length ; i++) {
            
            numeroActual = nums[i];

            if (numeroActual < target) {
                resultado = i+1;
            }

            if (numeroActual > target) {
                return resultado;
            }

        }


        return resultado;
    }

    public static int existeEnArray(int[] nums, int target){
        int resultado = -1;

        for (int i = 0 ; i < nums.length ; i++) {

            if (nums[i] == target) {
                return i;
            }

            if (nums[i] > target) {
                return resultado;
            }
        }


        return resultado;
    }
}
