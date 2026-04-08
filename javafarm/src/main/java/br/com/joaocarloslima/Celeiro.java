package br.com.joaocarloslima;

public class Celeiro {

    private final int capacidade;
    private int qtdeBatatas;
    private int qtdeCenouras;
    private int qtdeMorangos;

    public Celeiro(int capacidade, int qtdeBatatas, int qtdeCenouras, int qtdeMorangos) {
        if (capacidade < 0) {
            throw new IllegalArgumentException("Capacidade inválida.");
        }
        int total = qtdeBatatas + qtdeCenouras + qtdeMorangos;
        if (total > capacidade) {
            throw new IllegalArgumentException("Estoque inicial excede a capacidade.");
        }
        this.capacidade = capacidade;
        this.qtdeBatatas = qtdeBatatas;
        this.qtdeCenouras = qtdeCenouras;
        this.qtdeMorangos = qtdeMorangos;
    }

    public int getCapacidade() {
        return capacidade;
    }

    public int getQtdeBatatas() {
        return qtdeBatatas;
    }

    public int getQtdeCenouras() {
        return qtdeCenouras;
    }

    public int getQtdeMorangos() {
        return qtdeMorangos;
    }

    private int totalArmazenado() {
        return qtdeBatatas + qtdeCenouras + qtdeMorangos;
    }

    public int getEspacoDisponivel() {
        return capacidade - totalArmazenado();
    }

    public double getOcupacao() {
        if (capacidade == 0) {
            return 0;
        }
        return 100.0 * totalArmazenado() / capacidade;
    }

    public boolean celeiroCheio() {
        return getEspacoDisponivel() == 0;
    }

    public void armazenarBatata() {
        if (getEspacoDisponivel() < 2) {
            throw new CeleiroCheioException("Não há espaço no celeiro para armazenar batatas.");
        }
        qtdeBatatas += 2;
    }

    public void armazenarCenoura() {
        if (getEspacoDisponivel() < 2) {
            throw new CeleiroCheioException("Não há espaço no celeiro para armazenar cenouras.");
        }
        qtdeCenouras += 2;
    }

    public void armazenarMorango() {
        if (getEspacoDisponivel() < 2) {
            throw new CeleiroCheioException("Não há espaço no celeiro para armazenar morangos.");
        }
        qtdeMorangos += 2;
    }

    public void consumirBatata() {
        if (qtdeBatatas < 1) {
            throw new EstoqueInsuficienteException("Não há batatas suficientes no celeiro.");
        }
        qtdeBatatas--;
    }

    public void consumirCenoura() {
        if (qtdeCenouras < 1) {
            throw new EstoqueInsuficienteException("Não há cenouras suficientes no celeiro.");
        }
        qtdeCenouras--;
    }

    public void consumirMorango() {
        if (qtdeMorangos < 1) {
            throw new EstoqueInsuficienteException("Não há morangos suficientes no celeiro.");
        }
        qtdeMorangos--;
    }
}
