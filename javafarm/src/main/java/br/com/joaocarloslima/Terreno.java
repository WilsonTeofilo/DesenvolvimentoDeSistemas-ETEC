package br.com.joaocarloslima;

public class Terreno {

    private Batata batata;
    private Cenoura cenoura;
    private Morango morango;

    public Batata getBatata() {
        return batata;
    }

    public Cenoura getCenoura() {
        return cenoura;
    }

    public Morango getMorango() {
        return morango;
    }

    public boolean estaOcupado() {
        return batata != null || cenoura != null || morango != null;
    }

    public void plantarBatata(Batata b) {
        this.batata = b;
        this.cenoura = null;
        this.morango = null;
    }

    public void plantarCenoura(Cenoura c) {
        this.cenoura = c;
        this.batata = null;
        this.morango = null;
    }

    public void plantarMorango(Morango m) {
        this.morango = m;
        this.batata = null;
        this.cenoura = null;
    }

    public void colher(Celeiro celeiro) {
        if (!estaOcupado()) {
            throw new IllegalStateException("Não há nada plantado neste terreno.");
        }
        if (batata != null) {
            if (!batata.podeColher()) {
                throw new IllegalStateException("A batata ainda não está pronta para colheita.");
            }
            celeiro.armazenarBatata();
            batata = null;
            return;
        }
        if (cenoura != null) {
            if (!cenoura.podeColher()) {
                throw new IllegalStateException("A cenoura ainda não está pronta para colheita.");
            }
            celeiro.armazenarCenoura();
            cenoura = null;
            return;
        }
        if (morango != null) {
            if (!morango.podeColher()) {
                throw new IllegalStateException("O morango ainda não está pronto para colheita.");
            }
            celeiro.armazenarMorango();
            morango = null;
            return;
        }
        throw new IllegalStateException("Estado inconsistente do terreno.");
    }
}
