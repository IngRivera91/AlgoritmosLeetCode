// https://leetcode.com/problems/valid-parentheses/
import java.util.ArrayList;

class ValidParentheses {

    public static void main (String [] args){
        String case1 = "{[]}";
        String case2 = "{}]()()[]";
        String case3 = "{}{}()()[}";

        if (isValid(case1)){
            System.out.println("Case1 pass");
        }

        if (!isValid(case2)){
            System.out.println("Case2 pass");
        }

        if (!isValid(case3)){
            System.out.println("Case3 pass");
        }
    }

    public static boolean isValid(String s) {

        // se crea la pila en donde se guardan los caracteres de apertura
        ArrayList<Character> pila = new ArrayList<>();

        Character caracterActual;
        Character caracterActualOpuesto;
        Character ultimoCaracterPila;
        int pilaSize;
        int indexUltimoCaractarPila;

        for (int i = 0 ; i < s.length() ; i ++) {

            caracterActual = s.charAt(i);

            // comprobar si es un caracter de apertura
            if ( isOpen(caracterActual) ){
                pila.add(caracterActual);
                continue;
            }

            pilaSize = pila.size();
        
            if (pilaSize == 0) { // fuera D
                return false;
            }

            indexUltimoCaractarPila = pilaSize-1;

            // se obtine el ultimo elemento de la pila
            ultimoCaracterPila = pila.get(indexUltimoCaractarPila);

            pila.remove(indexUltimoCaractarPila);// fuera D

            caracterActualOpuesto = obtenerCaracterOpuesto(caracterActual);

            if ( caracterActualOpuesto != ultimoCaracterPila ) {
                return false;
            }

        }
        
        if (pila.size() != 0) { // fuera D
            return false;
        }

        return true;
    }

    public static Character obtenerCaracterOpuesto (Character caracter) {
        if (caracter == ')') {
            return '(';
        }

        if (caracter == '}') {
            return '{';
        }

        if (caracter == ']') {
            return '[';
        } 

        return '*';
    }

    public static boolean isOpen(Character caracter) {

        if (caracter == '(') {
            return true;
        }

        if (caracter == '{') {
            return true;
        }

        if (caracter == '[') {
            return true;
        }

        return false;
    }

}