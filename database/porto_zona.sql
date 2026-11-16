CREATE DATABASE IF NOT EXISTS porto_zona
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE porto_zona;

CREATE TABLE IF NOT EXISTS portfolio_profile (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(150) NOT NULL,
  role VARCHAR(100) NOT NULL,
  bio TEXT NOT NULL,
  institution VARCHAR(200) NOT NULL,
  study_program VARCHAR(120) NOT NULL,
  email VARCHAR(254) NOT NULL,
  phone VARCHAR(30) DEFAULT NULL,
  profile_image_path VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY portfolio_profile_email_unique (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS social_links (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  platform VARCHAR(50) NOT NULL,
  label VARCHAR(100) NOT NULL,
  url VARCHAR(2048) NOT NULL,
  sort_order INT UNSIGNED NOT NULL DEFAULT 0,
  is_active BOOLEAN NOT NULL DEFAULT TRUE,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY social_links_platform_unique (platform)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS projects (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  slug VARCHAR(160) NOT NULL,
  title VARCHAR(180) NOT NULL,
  summary VARCHAR(255) NOT NULL,
  category VARCHAR(100) NOT NULL,
  project_year SMALLINT UNSIGNED NOT NULL,
  contact_url VARCHAR(2048) DEFAULT NULL,
  image_path VARCHAR(255) DEFAULT NULL,
  sort_order INT UNSIGNED NOT NULL DEFAULT 0,
  is_published BOOLEAN NOT NULL DEFAULT TRUE,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY projects_slug_unique (slug),
  KEY projects_published_order_index (is_published, sort_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS certificates (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  slug VARCHAR(160) NOT NULL,
  title VARCHAR(180) NOT NULL,
  issuer VARCHAR(180) DEFAULT NULL,
  issued_at DATE DEFAULT NULL,
  credential_url VARCHAR(2048) DEFAULT NULL,
  image_path VARCHAR(255) DEFAULT NULL,
  sort_order INT UNSIGNED NOT NULL DEFAULT 0,
  is_published BOOLEAN NOT NULL DEFAULT TRUE,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY certificates_slug_unique (slug),
  KEY certificates_published_order_index (is_published, sort_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO portfolio_profile
  (id, name, role, bio, institution, study_program, email, phone, profile_image_path)
VALUES
  (
    1,
    'Rizki Zonanta Wicaksana',
    'Web Developer',
    'Saya adalah mahasiswa Informatika di Universitas Teknokrat Indonesia yang memiliki ketertarikan dalam bidang teknologi, khususnya pengembangan web, aplikasi, dan desain antarmuka (UI/UX). Saya senang mempelajari hal-hal baru, mengeksplorasi teknologi, serta mengembangkan ide menjadi solusi digital yang kreatif, responsif, dan fungsional. Saya terus mengasah kemampuan dalam bidang pemrograman dan pengembangan aplikasi untuk menciptakan pengalaman pengguna yang nyaman, modern, dan mudah digunakan. Bagi saya, setiap proyek merupakan kesempatan untuk belajar, berkembang, dan menghasilkan sesuatu yang bermanfaat.',
    'Universitas Teknokrat Indonesia',
    'Informatika',
    'rizkizonantawicaksana@teknokrat.ac.id',
    '0887 0708 2727',
    'images/profil.png'
  );

INSERT IGNORE INTO social_links (platform, label, url, sort_order)
VALUES
  ('email', 'rizkizonantawicaksana@teknokrat.ac.id', 'mailto:rizkizonantawicaksana@teknokrat.ac.id', 1),
  ('instagram', '@rizkizonanta.w', 'https://www.instagram.com/rizkizonanta.w/', 2),
  ('whatsapp', '0887 0708 2727', 'https://wa.me/6288707082727', 3);

INSERT IGNORE INTO projects
  (slug, title, summary, category, project_year, contact_url, sort_order)
VALUES
  ('nusa-studio', 'Nusa Studio', 'Identitas visual', 'Branding', 2025, 'mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Proyek%20Nusa%20Studio', 1),
  ('saku', 'Saku', 'Desain produk', 'UI / UX', 2025, 'mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Proyek%20Saku', 2),
  ('forma-objects', 'Forma Objects', 'Web design', 'Web', 2024, 'mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Proyek%20Forma', 3);
