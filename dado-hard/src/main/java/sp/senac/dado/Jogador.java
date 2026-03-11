package sp.senac.dado;

public class Jogador {
    private String nome;
    private int vidas;


    public Jogador(String nome) {
        this.nome = nome;
        this.vidas = 5;
    }


    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getVidas() {
        return vidas;
    }

    public void setVidas(int vidas) {
        this.vidas = vidas;
    }


    public int rolarDado(Dado dado) {
        int resultado = dado.rolar();


        if (resultado % 2 == 0) {
            this.perderVida();
        } else {
            this.ganharVida();
        }

        return resultado;
    }

    public boolean estaVivo() {
   if (vidas >0){
       return true;}

       return false;
    }

    public void perderVida() {
        if (this.vidas > 0) {
            this.vidas -= 1;
        }
    }

    public void ganharVida() {
        if (this.vidas >=5){
            this.vidas += 1;
        }

    }
}