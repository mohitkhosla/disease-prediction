from dbscanner import DBScanner
import re, csv, sys

def get_data(config):
    data = []
    with open('data/DataSet.csv') as file_obj:
    #with open(DATA, 'rb') as file_obj:
        csv_reader = csv.reader(file_obj)
        for id_, row in enumerate(csv_reader):
            if len(row) < config['dim']:
                print ("ERROR: The data you have provided has fewer \
                    dimensions than expected (dim = %d < %d)"
                    % (config['dim'], len(row)))
                sys.exit()
            else:
                point = {'id':id_}
                for dim in range(0, config['dim']):
                    point[dim] = float(row[dim])
                data.append(point)
    return data


def read_config():
    config = {}
    #with open(CONFIG, 'r', encoding='utf-8-sig') as file_obj:
    #with open(CONFIG, 'rb') as file_obj:
    with open('config', 'r') as file_obj:
            for line in file_obj:
                    key, value = line.split('=')
                    config[key.strip()] = int(value.strip())
    return config

def main():

    config = read_config()

    dbc = DBScanner(config)
    data = get_data(config)

    dbc.dbscan(data)

if __name__ == "__main__":
    main()
