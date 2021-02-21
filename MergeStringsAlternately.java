//  https://leetcode.com/contest/weekly-contest-229/problems/merge-strings-alternately/

public class MergeStringsAlternately {

    public static String mergeAlternately(String word1, String word2) {
        String mergeString = "";

        int sizeWord1 = word1.length();
        int sizeWord2 = word2.length();

        int iter = 0;

        while (iter < sizeWord1 || iter < sizeWord2) {
            if (iter < sizeWord1) {
                mergeString += String.valueOf(word1.charAt(iter));
            }
            if (iter < sizeWord2) {
                mergeString += String.valueOf(word2.charAt(iter));
            }
            iter++;
        }

        return mergeString;
    }

}
