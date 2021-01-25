class MaximumUnitsonaTruck {

    public static void main (String [] args) {
        int [][] boxTypes1 = {{1,3},{2,2},{3,1}};
        int truckSize1 = 4;
        int [][] boxTypes2 = {{5,10},{2,5},{4,7},{3,9}};
        int truckSize2 = 10;

        if (maximumUnits(boxTypes1, truckSize1) == 8) {
            System.out.println("pass");
        }else{
            System.out.println("no pass");
        }

        if (maximumUnits(boxTypes2, truckSize2) == 91) {
            System.out.println("pass");
        }else{
            System.out.println("no pass");
        }
    }

    public static int maximumUnits(int[][] boxTypes, int truckSize) {

        int cajaMasgrande = -1;
        int ultimaCajaUtilizada = 0;

        while (truckSize > 0) {

            for (int i = 0 ; i < boxTypes.length ; i ++) {
                if (boxTypes[i][1] > cajaMasgrande) {
                    if (ultimaCajaUtilizada != -1) {
                        if (ultimaCajaUtilizada != i) {
                            cajaMasgrande = i;
                            continue;
                        }
                    }
                    cajaMasgrande = i;
                }
            }
    
        }



        return -1;    
    }
}