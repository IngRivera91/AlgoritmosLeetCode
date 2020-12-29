// https://leetcode.com/problems/implement-strstr/
// https://java-spain.com/manejo-cadenas-java-metodos-split-indexof-substring-y-trim
// https://muchocodigo.com/como-saber-si-un-string-esta-dentro-de-otro-en-java/

public class ImplementstrStr {

    public static void main (String [] args) {

    }

    public int strStr(String haystack, String needle) {

        if (needle.length() == 0) {
            return 0;
        }

        int index = haystack.indexOf(needle);

        return index;
    }
    
}