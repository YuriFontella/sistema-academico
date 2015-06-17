CREATE TABLE IF NOT EXISTS aluno (
  id int(11) NOT NULL AUTO_INCREMENT,
  cpf char(11) NOT NULL,
  nome varchar(49) NOT NULL,
  email varchar(49) NOT NULL,
  fone varchar(14) NOT NULL,
  data_nascimento date DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS curso (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(49) NOT NULL,
  carga_horaria varchar(49) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS professor (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(49) NOT NULL,
  email varchar(49) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS matricula (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  turma_id int(10) unsigned NOT NULL,
  aluno_id int(11) NOT NULL,
  data_matricula date DEFAULT NULL,
  PRIMARY KEY (id),
  KEY matricula_fkindex1 (aluno_id),
  KEY matricula_fkindex3 (turma_id)
);

CREATE TABLE IF NOT EXISTS disciplina (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  professor_id int(11) NOT NULL,
  curso_id int(10) unsigned NOT NULL,
  data_inicio date DEFAULT NULL,
  data_final date DEFAULT NULL,
  qtd_creditos int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY disciplina_fkindex1 (curso_id),
  KEY disciplina_fkindex2 (professor_id)
);

CREATE TABLE IF NOT EXISTS turma (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  curso_id int(10) unsigned NOT NULL,
  data_inicio date DEFAULT NULL,
  data_final date DEFAULT NULL,
  PRIMARY KEY (id),
  KEY turma_fkindex1 (curso_id)
);

ALTER TABLE turma
  ADD CONSTRAINT turma_fkindex1 FOREIGN KEY (curso_id) REFERENCES curso (id) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE matricula
  ADD CONSTRAINT matriculas_ibfk_1 FOREIGN KEY (aluno_id) REFERENCES aluno (id) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT matriculas_ibfk_2 FOREIGN KEY (turma_id) REFERENCES turma (id) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE disciplina
  ADD CONSTRAINT disciplina_ibfk_1 FOREIGN KEY (curso_id) REFERENCES curso (id) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT disciplina_ibfk_2 FOREIGN KEY (professor_id) REFERENCES professor (id) ON DELETE NO ACTION ON UPDATE NO ACTION;
