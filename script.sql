CREATE TABLE IF NOT EXISTS `webmixdb`.`categorias` (
    `idcategorias` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NULL,
    `status` VARCHAR(45) NULL,
    PRIMARY KEY (`idcategorias`)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webmixdb`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webmixdb`.`cursos` (
  `idcursos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `conteudo` VARCHAR(100) NULL,
  `status` VARCHAR(45) NULL,
  `categorias` INT NOT NULL,
  PRIMARY KEY (`idcursos`),
    FOREIGN KEY (`categorias`)
    REFERENCES `webmixdb`.`categorias` (`idcategorias`)    
)ENGINE = InnoDB;