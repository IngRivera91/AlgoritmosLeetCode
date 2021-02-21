public class MergeStringsAlternatelyV2 {
    
    public  String mergeAlternately(String word1, String word2) {

        int sizeWord1 = word1.length();
        int sizeWord2 = word2.length();
        
        StringBuilder mergerString = new StringBuilder(sizeWord1+sizeWord2);
        
        int iter = 0;

        while (iter < sizeWord1 && iter < sizeWord2) {
            mergerString.append(word1.charAt(iter));
            mergerString.append(word2.charAt(iter));
            iter++;
        }

        if (iter < sizeWord1) {
            mergerString.append(word1.substring(iter));
        }

        if (iter < sizeWord2) {
            mergerString.append(word2.substring(iter));
        }

        return mergerString.toString();
    }
}
