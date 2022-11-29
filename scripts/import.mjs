#!/usr/bin/env zx
import converter from "json-2-csv";

$.verbose = false;

let dataRaw = await fs.readFile("./data.txt", "utf-8");
dataRaw = dataRaw.replace(/[|]/g, ",");

const jsonRaw = await converter.csv2jsonAsync(dataRaw);
const settlements = [];
const zipCodes = new Map();

for (let i = 0; i < jsonRaw.length; i++) {
  const current = jsonRaw[i];
  let zipCode = {
    zip_code: current.d_codigo,
    locality: String(current.d_ciudad).toUpperCase(),
    federal_entity_key: parseInt(current.c_estado),
    federal_entity_name: String(current.d_estado).toUpperCase(),
    federal_entity_code: current.c_CP,
    municipality_key: parseInt(current.c_mnpio),
    municipality_name: String(current.D_mnpio).toUpperCase(),
  };
  let settlement = {
    zip_code: current.d_codigo,
    key: parseInt(current.id_asenta_cpcons),
    name: String(current.d_asenta).toUpperCase(),
    zone_type: String(current.d_zona).toUpperCase(),
    settlement_type_name: current.d_tipo_asenta,
  };
  zipCodes.set(current.d_codigo, zipCode);
  settlements.push(settlement);
}
const csvZipCode = await converter.json2csvAsync(Array.from(zipCodes.values()));
const csvSettlements = await converter.json2csvAsync(settlements);

await fs.outputFile("./zip-codes.csv", csvZipCode);
await fs.outputFile("./settlements.csv", csvSettlements);

await $`exit 0`;