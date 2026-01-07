import type {PaginationState, SortingState} from "@tanstack/react-table";
import type {Filter} from "@/hooks/queryFilters.ts";

export interface QueryParams {
  pagination: PaginationState;
  filters?: Record<string, Filter>;
  sorting?: SortingState;
}

export interface ApiQueryParams {
  page: number;
  per_page: number;
  filter?: Record<string, Filter>;
  sort?: string;
}

export const buildQueryParams = ({pagination, sorting, filters}: QueryParams): ApiQueryParams => {
  const sort = sorting?.map((sort) => (sort.desc ? `-${sort.id}` : `${sort.id}`)).join(',');

  return {
    page: pagination.pageIndex + 1,
    per_page: pagination.pageSize,
    filter: filters,
    sort: sort || undefined,
  };
}
