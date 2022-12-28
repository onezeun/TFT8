CREATE DATABASE tft8
    DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE origin_synergies (
  o_idx INT AUTO_INCREMENT PRIMARY KEY,
  o_title VARCHAR(50) NOT NULL,
  o_content TEXT,
  o_onskill TEXT NOT NULL,
  o_icon VARCHAR(50) NOT NULL
);

CREATE TABLE class_synergies (
  class_idx INT AUTO_INCREMENT PRIMARY KEY,
  class_title VARCHAR(50) NOT NULL,
  class_content TEXT,
  class_onskill TEXT NOT NULL,
  class_icon VARCHAR(50) NOT NULL
);


CREATE TABLE champions (
  c_idx INT AUTO_INCREMENT PRIMARY KEY,
  c_name VARCHAR(50) NOT NULL,
  c_cost CHAR(1) NOT NULL,
  c_icon VARCHAR(50) NOT NULL,
  c_img VARCHAR(50) NOT NULL,
  c_skill_title VARCHAR(50) NOT NULL,
  c_skill_content TEXT NOT NULL,
  c_skill_icon VARCHAR(50) NOT NULL
);

CREATE TABLE champion_origin (
  c_idx INT,
  o_idx INT,
  FOREIGN KEY (c_idx) REFERENCES champions (c_idx) ON DELETE CASCADE,
  FOREIGN KEY (o_idx) REFERENCES origin_synergies (o_idx)
);

CREATE TABLE champion_class (
  c_idx INT,
  class_idx INT,
  FOREIGN KEY (c_idx) REFERENCES champions (c_idx) ON DELETE CASCADE,
  FOREIGN KEY (class_idx) REFERENCES class_synergies (class_idx)
);


-- class 영웅 1, 실버 2, 골드, 3, 프리즘 4
CREATE TABLE augments (
  a_idx INT AUTO_INCREMENT PRIMARY KEY,
  a_class CHAR(1) NOT NULL,
  a_title VARCHAR(50) NOT NULL,
  a_content TEXT NOT NULL,
  a_icon VARCHAR(255) NOT NULL,
  c_idx INT,
  FOREIGN KEY (c_idx) REFERENCES champions (c_idx)
);