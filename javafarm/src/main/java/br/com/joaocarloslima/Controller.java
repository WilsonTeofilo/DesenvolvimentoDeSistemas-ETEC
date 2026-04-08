package br.com.joaocarloslima;

import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;

import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ProgressBar;
import javafx.scene.control.ToggleButton;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.GridPane;

public class Controller implements Initializable {

    private static final int GRID_TAMANHO = 13;
    private static final int CELULA = 50;

    private final Fazenda fazenda = new Fazenda();
    private final List<ImageView> imageTerrenos = new ArrayList<>();
    private Image imagemTerrenoLivre;
    private volatile int sleepTime = 3000;

    @FXML
    private GridPane grid;
    @FXML
    private ToggleButton botaoBatata;
    @FXML
    private ToggleButton botaoCenoura;
    @FXML
    private ToggleButton botaoMorango;
    @FXML
    private ToggleButton botaoColher;
    @FXML
    private ProgressBar ocupacaoDoCeleiro;
    @FXML
    private CheckBox ckbAcelerar;

    public void atualizar() {
        Celeiro c = fazenda.getCeleiro();
        botaoBatata.setText("Batata x " + c.getQtdeBatatas());
        botaoCenoura.setText("Cenoura x " + c.getQtdeCenouras());
        botaoMorango.setText("Morango x " + c.getQtdeMorangos());
        double fracao = c.getOcupacao() / 100.0;
        ocupacaoDoCeleiro.setProgress(Math.max(0, Math.min(1, fracao)));

        for (int x = 0; x < GRID_TAMANHO; x++) {
            for (int y = 0; y < GRID_TAMANHO; y++) {
                Terreno terreno = fazenda.getTerreno(x, y);
                ImageView imageView = imageTerrenos.get(x * GRID_TAMANHO + y);
                if (terreno.getBatata() != null) {
                    carregarImagem(imageView, terreno.getBatata().getImagem());
                } else if (terreno.getCenoura() != null) {
                    carregarImagem(imageView, terreno.getCenoura().getImagem());
                } else if (terreno.getMorango() != null) {
                    carregarImagem(imageView, terreno.getMorango().getImagem());
                } else {
                    imageView.setImage(imagemTerrenoLivre);
                }
            }
        }
    }

    private void carregarImagem(ImageView imageView, String caminhoRelativo) {
        URL url = getClass().getResource(caminhoRelativo);
        if (url != null) {
            imageView.setImage(new Image(url.toExternalForm()));
        } else {
            imageView.setImage(imagemTerrenoLivre);
        }
    }

    public void ciclo() {
        for (int x = 0; x < GRID_TAMANHO; x++) {
            for (int y = 0; y < GRID_TAMANHO; y++) {
                Terreno terreno = fazenda.getTerreno(x, y);
                if (terreno.getBatata() != null) {
                    terreno.getBatata().crescer();
                } else if (terreno.getCenoura() != null) {
                    terreno.getCenoura().crescer();
                } else if (terreno.getMorango() != null) {
                    terreno.getMorango().crescer();
                }
            }
        }
        atualizar();
    }

    public void acelerar() {
        if (ckbAcelerar.isSelected()) {
            sleepTime = 1000;
        } else {
            sleepTime = 3000;
        }
    }

    public void clockThread() {
        Thread thread = new Thread(() -> {
            while (!Thread.currentThread().isInterrupted()) {
                try {
                    Thread.sleep(sleepTime);
                    Platform.runLater(this::ciclo);
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                    break;
                }
            }
        });
        thread.setDaemon(true);
        thread.start();
    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        URL livre = getClass().getResource("images/free.png");
        imagemTerrenoLivre = livre != null ? new Image(livre.toExternalForm()) : null;

        for (int x = 0; x < GRID_TAMANHO; x++) {
            for (int y = 0; y < GRID_TAMANHO; y++) {
                ImageView imageView = new ImageView();
                imageView.setFitHeight(CELULA);
                imageView.setFitWidth(CELULA);
                imageView.setImage(imagemTerrenoLivre);
                grid.add(imageView, x, y);
                imageTerrenos.add(imageView);
            }
        }

        grid.setOnMouseClicked(e -> {
            int coluna = (int) (e.getX() / CELULA);
            int linha = (int) (e.getY() / CELULA);
            if (coluna < 0 || coluna >= GRID_TAMANHO || linha < 0 || linha >= GRID_TAMANHO) {
                return;
            }
            try {
                if (botaoCenoura.isSelected()) {
                    fazenda.plantarCenoura(coluna, linha);
                } else if (botaoBatata.isSelected()) {
                    fazenda.plantarBatata(coluna, linha);
                } else if (botaoMorango.isSelected()) {
                    fazenda.plantarMorango(coluna, linha);
                } else if (botaoColher.isSelected()) {
                    fazenda.colher(coluna, linha);
                }
                atualizar();
            } catch (Exception ex) {
                Alert alert = new Alert(Alert.AlertType.ERROR);
                alert.setTitle("Erro");
                String msg = ex.getMessage();
                alert.setHeaderText(msg != null && !msg.isBlank() ? msg : ex.toString());
                alert.showAndWait();
            }
        });

        atualizar();
        clockThread();
    }
}
