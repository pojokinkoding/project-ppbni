CREATE TABLE member (
    member_id            INT             NOT NULL,
    member_period        INT             NOT NULL,
    member_nik           VARCHAR(255),
    member_name          VARCHAR(255),
    member_address       TEXT,
    member_gender        VARCHAR(50),
    member_birthdate     DATE,
    member_birthplace    VARCHAR(255),
    member_phone         VARCHAR(50),
    member_email         VARCHAR(255),
    member_date          DATE,  -- tanggal daftar
    member_off_date      DATE,  -- tanggal keluar
    member_active        BOOLEAN,
    member_job           VARCHAR(255),
    member_education     VARCHAR(255),
    member_photo         TEXT,
    
    member_createddate   TIMESTAMP       NOT NULL,
    member_createdby     INT             NOT NULL,
    member_modifieddate  TIMESTAMP,
    member_modifiedby    INT,

    PRIMARY KEY (member_id, member_period)
);


