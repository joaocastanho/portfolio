drop table if exists `tbl_page`;
create table if not exists `tbl_page`
(
    `id_page`               integer auto_increment,
    `page_name`             char(32) not null unique,
    `page_publish_start_ts` datetime not null default current_timestamp,
    `page_publish_stop_ts`  datetime,
    `page_create_ts`        datetime not null default current_timestamp,
    `page_update_ts`        timestamp,

    primary key (`id_page`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;

drop table if exists `tbl_tag`;
create table if not exists `tbl_tag`
(
    `id_tag`        integer auto_increment,
    `tag_name`      char(32) not null unique,
    `tag_create_ts` datetime not null default current_timestamp,
    `tag_update_ts` timestamp,

    primary key (`id_tag`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;

drop table if exists `tbl_page_tag`;
create table if not exists `tbl_page_tag`
(
    `ref_id_tag`         integer not null,
    `ref_id_page`        integer not null,
    `page_tag_create_ts` datetime not null default current_timestamp,
    `page_tag_update_ts` timestamp,

    primary key (`ref_id_tag`, `ref_id_page`),

    foreign key fk_id_tag (`ref_id_tag`) references `tbl_tag` (`id_tag`),
    foreign key fk_id_page (`ref_id_page`) references `tbl_page` (`id_page`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;

drop table if exists `tbl_menu`;
create table if not exists `tbl_menu`
(
    `id_menu`        integer auto_increment,
    `menu_name`      char(32) not null unique,
    `menu_create_ts` datetime not null default current_timestamp,
    `menu_update_ts` timestamp,
    
    primary key (`id_menu`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;

drop table if exists `tbl_menu_entry`;
create table if not exists `tbl_menu_entry`
(
    `id_menu_entry`        integer auto_increment,
    `ref_id_menu`          integer not null,
    `ref_id_menu_entry`    integer,
    `ref_id_page`          integer,
    `menu_entry_name`      char(32) not null,
    `menu_entry_order`     integer not null default 1,
    `menu_entry_create_ts` datetime not null default current_timestamp,
    `menu_entry_update_ts` timestamp,
    
    primary key (`id_menu_entry`),

    foreign key fk_id_menu (`ref_id_menu`) references `tbl_menu` (`id_menu`),
    foreign key fk_id_menu_entry (`ref_id_menu_entry`) references `tbl_menu_entry` (`id_menu_entry`),
    foreign key fk_id_page (`ref_id_page`) references `tbl_page` (`id_page`),

    index idx_entry_name (`ref_id_menu_entry`, `menu_entry_name`),
    index idx_entry_order (`ref_id_menu_entry`, `menu_entry_order`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;

drop table if exists `tbl_admin`;
create table if not exists `tbl_admin`
(
    `id_admin`        integer auto_increment,
    `admin_name`      varchar(64) not null,
    `admin_email`     varchar(64) not null,
    `admin_password`  varchar(64),
    `admin_create_ts` datetime not null default current_timestamp,
    `admin_update_ts` timestamp,

    primary key (`id_admin`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;

insert into `tbl_admin` (`admin_name`, `admin_email`, `admin_password`)
                 values ('Root', 'root@email.com', sha2('pass', 256));

drop table if exists `tbl_admin_chap`;
create table if not exists `tbl_admin_chap`
(
    `id_admin_chap`        integer auto_increment,
    `ref_id_admin`         integer not null,
    `admin_chap_source_ip` char(16),
    `admin_chap_request`   char(128),
    `admin_chap_expected`  char(128),
    `admin_chap_reply`     char(128),
    `admin_chap_ttl`       datetime,
    `admin_chap_create_ts` datetime not null default current_timestamp,
    `admin_chap_update_ts` timestamp,

    primary key (`id_admin_chap`),

    foreign key fk_id_admin (`ref_id_admin`) references `tbl_admin` (`id_admin`),

    index idx_source_ip (`admin_chap_source_ip`),
    index idx_request (`admin_chap_request`)
) engine = MyISAM,
  default character set = utf8,
  collate = utf8_bin;
