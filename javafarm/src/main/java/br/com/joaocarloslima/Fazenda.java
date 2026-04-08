package br.com.joaocarloslima;

public class Fazenda {

    private static final int LINHAS = 13;
    private static final int COLUNAS = 13;

    private final Terreno[][] terrenos;
    private final Celeiro celeiro;

    public Fazenda() {
        celeiro = new Celeiro(400, 20, 20, 20);
        terrenos = new Terreno[COLUNAS][LINHAS];
        for (int x = 0; x < COLUNAS; x++) {
            for (int y = 0; y < LINHAS; y++) {
                terrenos[x][y] = new Terreno();
            }
        }
    }

    public Celeiro getCeleiro() {
        return celeiro;
    }

    public Terreno getTerreno(int coluna, int linha) {
        validarIndice(coluna, linha);
        return terrenos[coluna][linha];
    }

    private void validarIndice(int coluna, int linha) {
        if (coluna < 0 || coluna >= COLUNAS || linha < 0 || linha >= LINHAS) {
            throw new IllegalArgumentException("Posição de terreno inválida.");
        }
    }

    public void plantarBatata(int coluna, int linha) {
        if (celeiro.getQtdeBatatas() < 1) {
            throw new EstoqueInsuficienteException("Não há batatas suficientes no celeiro.");
        }
        Terreno t = getTerreno(coluna, linha);
        if (t.estaOcupado()) {
            throw new IllegalStateException("Este terreno já está ocupado.");
        }
        t.plantarBatata(new Batata());
        celeiro.consumirBatata();
    }

    public void plantarCenoura(int coluna, int linha) {
        if (celeiro.getQtdeCenouras() < 1) {
            throw new EstoqueInsuficienteException("Não há cenouras suficientes no celeiro.");
        }
        Terreno t = getTerreno(coluna, linha);
        if (t.estaOcupado()) {
            throw new IllegalStateException("Este terreno já está ocupado.");
        }
        t.plantarCenoura(new Cenoura());
        celeiro.consumirCenoura();
    }

    public void plantarMorango(int coluna, int linha) {
        if (celeiro.getQtdeMorangos() < 1) {
            throw new EstoqueInsuficienteException("Não há morangos suficientes no celeiro.");
        }
        Terreno t = getTerreno(coluna, linha);
        if (t.estaOcupado()) {
            throw new IllegalStateException("Este terreno já está ocupado.");
        }
        t.plantarMorango(new Morango());
        celeiro.consumirMorango();
    }

    public void colher(int coluna, int linha) {
        getTerreno(coluna, linha).colher(celeiro);
    }
}
