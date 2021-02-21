// https://leetcode.com/contest/weekly-contest-229/problems/minimum-number-of-operations-to-move-all-balls-to-each-box/

public class MinimumNumberofOperationstoMoveAllBallstoEachBox {

    public static void main (String [] args) {

    }

    public static int[] minOperations(String boxes) {
        int numBoxes = boxes.length();
        int [] respuesta = new int [numBoxes];
        int count;
        int diff;
        int valueOfbox;
        String valueOfboxString;

        for (int indexOfBase = 0 ; indexOfBase < numBoxes ; indexOfBase++) {
            
            count = 0;

            for (int indexOfBox = 0 ; indexOfBox < numBoxes ; indexOfBox++ ) {
                if (indexOfBase == indexOfBox) {
                    continue;
                }
                diff = Math.abs(indexOfBase - indexOfBox);
                valueOfboxString = String.valueOf(boxes.charAt(indexOfBox));
                valueOfbox = Integer.parseInt(valueOfboxString);
                count += diff * valueOfbox; 
            }

            respuesta[indexOfBase] = count;         
              
        }

        return respuesta;
    }
}
