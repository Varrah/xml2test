CREATE TABLE AddressBlocks (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Regions (
    id             INT     NOT NULL DEFAULT 0 PRIMARY KEY,
    name           VARCHAR(255),
    isRegion       BOOLEAN NOT NULL DEFAULT FALSE,
    isCityDistrict BOOLEAN NOT NULL DEFAULT FALSE,
    addressBlockId INT     NOT NULL DEFAULT 0,
    statusId       INT     NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Builders (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Subways (
    id             INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name           VARCHAR(255),
    line           INT NOT NULL DEFAULT 0,
    addressBlockId INT NOT NULL DEFAULT 0,
    statusId       INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE RoomTypes (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Decorations (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Repairs (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE FlatTypes (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE BuildingVariants (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE BuildingTypes (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Banks (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE ContractTypes (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Classes (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE ComplexTypes (
    id       INT NOT NULL DEFAULT 0 PRIMARY KEY,
    name     VARCHAR(255),
    statusId INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE Complexes (
    id              INT NOT NULL DEFAULT 0 PRIMARY KEY,
    title           VARCHAR(255),
    address         VARCHAR(255),
    regionId        INT NOT NULL DEFAULT 0,
    latitude        TEXT,
    longitude       TEXT,
    builderId       INT NOT NULL DEFAULT 0,
    buildingClassId INT NOT NULL DEFAULT 0,
    complexTypeId   INT NOT NULL DEFAULT 0,
    note            TEXT,
    statusId        INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE ComplexSubways (
    complexId INT NOT NULL DEFAULT 0,
    subwayId  INT NOT NULL DEFAULT 0,
    distance  TEXT,
    statusId  INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;
CREATE UNIQUE INDEX ComplexSubways_complexId_subwayId_uindex ON ComplexSubways (complexId, subwayId);

CREATE TABLE ComplexImages (
    complexId INT     NOT NULL DEFAULT 0,
    isMain    BOOLEAN NOT NULL DEFAULT FALSE,
    fileName  VARCHAR(255),
    statusId  INT     NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;
CREATE UNIQUE INDEX ComplexImages_complexId_fileName_uindex ON ComplexImages (complexId, fileName);

CREATE TABLE Mortgages (
    buildingId INT NOT NULL DEFAULT 0,
    bankId     INT NOT NULL DEFAULT 0,
    statusId   INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;
CREATE INDEX Mortgages_buildingId_bankId_index ON Mortgages (buildingId, bankId);

CREATE TABLE Buildings (
    id                INT NOT NULL DEFAULT 0 PRIMARY KEY,
    complexId         INT NOT NULL DEFAULT 0,
    corp              INT NOT NULL DEFAULT 0,
    floors            INT NOT NULL DEFAULT 0,
    buildingTypeId    INT NOT NULL DEFAULT 0,
    buildingVariantId INT NOT NULL DEFAULT 0,
    line              INT NOT NULL DEFAULT 0,
    contractTypeId    INT NOT NULL DEFAULT 0,
    mortgage          INT NOT NULL DEFAULT 0,
    militaryMortgage  INT NOT NULL DEFAULT 0,
    subsidy           INT NOT NULL DEFAULT 0,
    maternitycapital  INT NOT NULL DEFAULT 0,
    installment       INT NOT NULL DEFAULT 0,
    endingPeriod      TEXT,
    statusId          INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE ApartmentsFirst (
    id                    INT     NOT NULL DEFAULT 0 PRIMARY KEY,
    complexId             INT     NOT NULL DEFAULT 0,
    buildingId            INT     NOT NULL DEFAULT 0,
    number                INT     NOT NULL DEFAULT 0,
    section               INT     NOT NULL DEFAULT 0,
    floor                 INT     NOT NULL DEFAULT 0,
    levels                INT     NOT NULL DEFAULT 0,
    roomTypeId            INT     NOT NULL DEFAULT 0,
    isApart               BOOLEAN NOT NULL DEFAULT FALSE,
    sTotal                VARCHAR(255),
    sRoom                 VARCHAR(255),
    sLiving               VARCHAR(255),
    sKitchen              VARCHAR(255),
    sCorridor             VARCHAR(255),
    sWaterCloset          VARCHAR(255),
    height                TEXT,
    flatTypeId            TEXT,
    decorationId          INT     NOT NULL DEFAULT 0,
    flatCostWithDiscounts INT     NOT NULL DEFAULT 0,
    flatCostBase          INT     NOT NULL DEFAULT 0,
    flatPlans             TEXT,
    isApartmentFirst      BOOLEAN NOT NULL DEFAULT FALSE,
    statusId              INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;

CREATE TABLE ApartmentsSecond (
    id                INT NOT NULL DEFAULT 0 PRIMARY KEY,
    regionId          INT NOT NULL DEFAULT 0,
    latitude          VARCHAR(255),
    longitude         VARCHAR(255),
    address           VARCHAR(255),
    subwayId          INT NOT NULL DEFAULT 0,
    timeOnFoot        INT NOT NULL DEFAULT 0,
    classId           INT NOT NULL DEFAULT 0,
    buildingTypeId    INT NOT NULL DEFAULT 0,
    buildingVariantId INT NOT NULL DEFAULT 0,
    floors            INT NOT NULL DEFAULT 0,
    floor             INT NOT NULL DEFAULT 0,
    roomTypeId        INT NOT NULL DEFAULT 0,
    repairId          INT NOT NULL DEFAULT 0,
    sTotal            VARCHAR(255),
    sRoom             VARCHAR(255),
    sLiving           VARCHAR(255),
    sKitchen          VARCHAR(255),
    sCorridor         VARCHAR(255),
    sWaterCloset      VARCHAR(255),
    height            VARCHAR(255),
    flatCost          INT NOT NULL DEFAULT 0,
    statusId          INT NOT NULL DEFAULT 0
)
    Engine = InnoDB
    DEFAULT CHARSET = utf8;